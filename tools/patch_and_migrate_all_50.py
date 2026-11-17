# -*- coding: utf-8 -*-
import glob, os, subprocess

patch_code = """$base = dirname(__DIR__);
spl_autoload_register(function ($class) use ($base) {
    if (str_starts_with($class, 'App\\\\')) {
        $file = $base . '/app/' . str_replace('\\\\', '/', substr($class, 4)) . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }
    if (str_starts_with($class, 'Database\\\\Seeders\\\\')) {
        $file = $base . '/database/seeders/' . str_replace('\\\\', '/', substr($class, 17)) . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }
    if (str_starts_with($class, 'Database\\\\Factories\\\\')) {
        $file = $base . '/database/factories/' . str_replace('\\\\', '/', substr($class, 19)) . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }
}, true, true);

$app = new Illuminate\\Foundation\\Application(
"""

for d in sorted(glob.glob("Bai*")):
    if not os.path.isdir(d):
        continue
    app_php = os.path.join(d, "bootstrap", "app.php")
    if os.path.exists(app_php):
        with open(app_php, "r", encoding="utf-8") as f:
            content = f.read()
        target = "$app = new Illuminate\\Foundation\\Application("
        if "spl_autoload_register" not in content and target in content:
            content = content.replace(target, patch_code, 1)
            with open(app_php, "w", encoding="utf-8") as f:
                f.write(content)

print("Applied autoloader patch to all 50 projects!")

# Now run migrate:fresh --seed on all 50 projects
print("Running migrate:fresh --seed across all 50 projects...")
success_count = 0
for d in sorted(glob.glob("Bai*")):
    if not os.path.isdir(d):
        continue
    res = subprocess.run(["php", "artisan", "migrate:fresh", "--seed", "--force"], cwd=d, capture_output=True, text=True)
    if res.returncode == 0:
        success_count += 1
    else:
        print(f"Error in {d}: {res.stderr[:200]}")

print(f"Successfully migrated & seeded {success_count}/50 standalone Laravel projects!")

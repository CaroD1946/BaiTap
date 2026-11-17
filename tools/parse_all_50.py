import json, re

with open('de_summary.json', encoding='utf-8') as f:
    data = json.load(f)

print(f"Loaded {len(data)} exams.")
for d in data:
    num = d['num']
    title = d['title']
    desc = d['desc']
    text = d['full_text']
    
    # Extract table / model mentioned
    table_m = re.search(r'bảng\s+([a-zA-Z0-9_]+)', text, re.IGNORECASE)
    model_m = re.search(r'Model\s+([a-zA-Z0-9_]+)', text, re.IGNORECASE)
    controller_m = re.search(r'([a-zA-Z0-9_]+Controller)', text, re.IGNORECASE)
    
    table = table_m.group(1) if table_m else ''
    model = model_m.group(1) if model_m else ''
    controller = controller_m.group(1) if controller_m else ''
    
    print(f"[{num:02d}] {title} | Model: {model} | Table: {table} | Controller: {controller}")

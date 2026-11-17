import json, re

with open('de_summary.json', encoding='utf-8') as f:
    data = json.load(f)

print(f"Total exams: {len(data)}")
for d in data:
    num = d['num']
    title = d['title']
    desc = d['desc']
    full_text = d['full_text']
    
    # Extract questions
    cau_lines = []
    for line in full_text.split('\n'):
        line = line.strip()
        if line.startswith('Câu '):
            cau_lines.append(line)
            
    print(f"[{num:02d}] {title} - {len(cau_lines)} questions")

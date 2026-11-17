# -*- coding: utf-8 -*-
import json, os, shutil, subprocess

with open('database/data/all_exercises_meta.json', encoding='utf-8') as f:
    all_ex = json.load(f)

ex = all_ex[0] # Bai 01
num = ex['num']
num_str = f"{num:02d}"
folder = f"Bai{num_str}"

print(f"Testing generation for {folder}: {ex['title']}...")

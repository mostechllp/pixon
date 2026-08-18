import re

with open('c:/Mostech/pixon/pixon/header.php', 'r', encoding='utf-8') as f:
    content = f.read()

divs = re.findall(r'<div[^>]*>|</div>', content)
open_divs = 0
for i, tag in enumerate(divs):
    if tag.startswith('<div'):
        open_divs += 1
    else:
        open_divs -= 1
    print(f"{i}: {tag} -> open: {open_divs}")

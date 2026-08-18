import os, re

count = 0
for f in os.listdir('.'):
    if f.endswith('.php'):
        with open(f, 'r', encoding='utf-8') as file:
            content = file.read()
        
        if 'bento-title' in content:
            new_content = re.sub(r'<div class="bento-overlay"></div>\s*<h3 class="bento-title">.*?</h3>', '', content, flags=re.DOTALL)
            new_content = re.sub(r'<h3 class="bento-title">.*?</h3>', '', new_content, flags=re.DOTALL)
            
            if new_content != content:
                with open(f, 'w', encoding='utf-8') as file:
                    file.write(new_content)
                count += 1
                print('Updated', f)

print('Total files updated:', count)

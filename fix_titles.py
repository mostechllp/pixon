import os
import re

directory = 'c:/Users/jeeva/OneDrive/Documents/pixon'
for filename in os.listdir(directory):
    if filename.endswith('.php'):
        filepath = os.path.join(directory, filename)
        try:
            with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
                content = f.read()
            
            # Find and replace title tag contents
            # Replace any non-ascii characters in the title with a hyphen
            def replace_title(match):
                title_content = match.group(1)
                # Replace non-ascii chars or specific em-dash variants with '-'
                new_title = re.sub(r'[^\x00-\x7F]+', '-', title_content)
                # also replace multiple dashes with a single dash
                new_title = re.sub(r'-+', '-', new_title)
                # also replace ' - ' with ' - ' to avoid ' -- '
                return f'<title>{new_title}</title>'
            
            new_content = re.sub(r'<title>(.*?)</title>', replace_title, content, flags=re.IGNORECASE)
            
            if new_content != content:
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                print(f'Fixed {filename}')
        except Exception as e:
            print(f'Error with {filename}: {e}')

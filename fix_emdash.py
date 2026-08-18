import os
import re

directory = 'c:/Users/jeeva/OneDrive/Documents/pixon'
for filename in os.listdir(directory):
    if filename.endswith('.php'):
        filepath = os.path.join(directory, filename)
        try:
            with open(filepath, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Replace em-dashes and weird character sequences that look like it
            new_content = re.sub(r'<title>(.*?)—(.*?)</title>', r'<title>\1-\2</title>', content)
            new_content = re.sub(r'<title>(.*?)(.*?)</title>', r'<title>\1-\2</title>', new_content)
            
            if new_content != content:
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                print(f'Fixed em-dash in {filename}')
        except Exception as e:
            pass

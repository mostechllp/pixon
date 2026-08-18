import sys
from html.parser import HTMLParser

class MyHTMLParser(HTMLParser):
    def __init__(self):
        super().__init__()
        self.stack = []

    def handle_starttag(self, tag, attrs):
        if tag not in ['img', 'br', 'hr', 'input', 'meta', 'link', 'path', 'stop', 'line', 'polyline']:
            self.stack.append(tag)
            # print(f"Open: {tag} (stack: {len(self.stack)})")

    def handle_endtag(self, tag):
        if tag not in ['img', 'br', 'hr', 'input', 'meta', 'link', 'path', 'stop', 'line', 'polyline']:
            if self.stack and self.stack[-1] == tag:
                self.stack.pop()
                # print(f"Close: {tag} (stack: {len(self.stack)})")
            else:
                print(f"ERROR: Expected {self.stack[-1]} but got {tag} at line {self.getpos()[0]}")

with open('c:/Mostech/pixon/pixon/header.php', 'r', encoding='utf-8') as f:
    text = f.read()

# Remove php tags to not confuse parser
import re
text = re.sub(r'<\?php.*?\?>', '', text, flags=re.DOTALL)
text = re.sub(r'<\?=.*?\?>', '', text, flags=re.DOTALL)

parser = MyHTMLParser()
parser.feed(text)
if parser.stack:
    print(f"Unclosed tags: {parser.stack}")
else:
    print("All tags matched perfectly!")

import './bootstrap';
import hljs from 'highlight.js/lib/core';
import json from 'highlight.js/lib/languages/json';
import javascript from 'highlight.js/lib/languages/javascript';
import 'highlight.js/styles/github.css';
hljs.registerLanguage('json', json);
hljs.registerLanguage('javascript', javascript);
window.hljs = hljs;

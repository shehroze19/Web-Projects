import json
import sys
import requests


class OCR:
    name = sys.argv[1]

    def ocr_space_file(filename, overlay=True, api_key='0e78581dae88957', language='eng'):
        payload = {'isOverlayRequired': overlay,
                   'apikey': api_key,
                   'language': language,
                   }
        with open(filename, 'rb') as f:
            r = requests.post('https://api.ocr.space/parse/image',
                              files={filename: f},
                              data=payload,
                              )
        return r.content.decode()


    test_file = ocr_space_file(name)

    python_obj = json.loads(test_file)
    file = open('file.txt', 'w+')
    file.write(python_obj["ParsedResults"][0]["ParsedText"])
    file.close()

# hello-world-php

```bash
$ docker build -t AngelNoiteiro/hello-world-php .
$ docker run -d -P --name hello-world AngelNoiteiro/hello-world-php
$ docker port hello-world

  80/tcp -> 0.0.0.0:32772
```

Use http://0.0.0.0:32772/ para abrir na internet

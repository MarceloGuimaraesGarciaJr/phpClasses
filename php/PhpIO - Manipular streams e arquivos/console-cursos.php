<?php

$novoCurso = trim(fgets(STDIN));
file_put_contents('course-list.txt', "\n$novoCurso", FILE_APPEND);


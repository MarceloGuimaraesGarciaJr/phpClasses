<?php
$cursos = fopen('course-list.txt','r');

stream_copy_to_stream($cursos,STDOUT);
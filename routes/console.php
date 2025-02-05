<?php

$mountPath = fn (string $path) => __DIR__ . "/../app/{$path}";

$this->load($mountPath('Console'));
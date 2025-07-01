<?php

declare(strict_types=1);

arch('application must follow the defined Laravel architectural rules')
    ->preset()
    ->laravel();

arch('application must follow the defined PHP architectural rules')
    ->preset()
    ->php();

arch('application must follow security best practices')
    ->preset()
    ->security();

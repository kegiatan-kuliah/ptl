<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('panel.dashboard.index', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('panel.dashboard.index'));
});
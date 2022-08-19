<?php

/*
 * This file is part of Sticky Footer für das Backend.
 * 
 * (c) heimseiten.de - Webdesign aus Köln 2021 <info@heimseiten.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/heimseiten/contao-sticky-footer-backend-bundle
 */

use Contao\System;
use Symfony\Component\HttpFoundation\Request;

if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/heimseitencontaostickyfooterbackend/contao-sticky-footer-backend-bundle.scss|static';
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/heimseitencontaostickyfooterbackend/contao-sticky-footer-backend-bundle.js';
}

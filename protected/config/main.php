<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.extensions.fpdf.*',
        'application.extensions.html2fpdf.*',
        'application.extensions.html2pdf.*',
    ),
    'modules' => array(
    // uncomment the following to enable the Gii tool

      'gii'=>array(
      'class'=>'system.gii.GiiModule',
      'password'=>'1234',
      // If removed, Gii defaults to localhost only. Edit carefully to taste.
      'ipFilters'=>array('127.0.0.1','::1'),
      ),
        
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         */

        // database settings are configured in database.php
//		'db'=>require(dirname(__FILE__).'/database.php'),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=bpjs',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => YII_DEBUG ? null : 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'ePdf'=>array(
      'class'         => 'ext.yii-pdf.EYiiPdf',
      'params'        => array(
        'HTML2PDF' => array(
          'librarySourcePath' => 'application.vendors.html2pdf.*',
          'classFile'         => 'html2pdf.class.php', // For adding to Yii::$classMap
          'defaultParams'     => array( // More info: http://wiki.spipu.net/doku.php?id=html2pdf:en:v4:accueil
            'orientation' => 'P', // landscape or portrait orientation
            'format'      => 'A4', // format A4, A5, ...
            'language'    => 'en', // language: fr, en, it ...
            'unicode'     => true, // TRUE means clustering the input text IS unicode (default = true)
            'encoding'    => 'UTF-8', // charset encoding; Default is UTF-8
            'marges'      => array(10, 10, 10, 15), // margins by default, in order (left, top, right, bottom)
          )
        ),
      ),
    ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);

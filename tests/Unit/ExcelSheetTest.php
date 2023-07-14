<?php
require_once __DIR__  . '/../../Helper/Helper.php';
use Helper\Helper;

it('converts Single letter to column number', function () {
    $columnLetter = 'G';
    $columnNumber = Helper::letterToNumber($columnLetter);
    
    expect($columnNumber)->toBe(7);
});

it('converts letters to column number', function () {
    $columnLetter = 'AB';
    $columnNumber = Helper::letterToNumber($columnLetter);
    
    expect($columnNumber)->toBe(28);
});

it('converts another letters to column number', function () {
    $columnLetter = 'ZZ';
    $columnNumber = Helper::letterToNumber($columnLetter);
    
    expect($columnNumber)->toBe(702);
});

it('converts number to column letter', function () {
    $columnNumber = 28;
    $columnLetter = Helper::numberToLetter($columnNumber);

    expect($columnLetter)->toBe('AB');
});

it('converts another number to column letter', function () {
    $columnNumber = 702;
    $columnLetter = Helper::numberToLetter($columnNumber);

    expect($columnLetter)->toBe('ZZ');
});
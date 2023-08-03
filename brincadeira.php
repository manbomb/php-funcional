<?php

function qualquer(): string
{
    return 'Olá Mundo!';
}

function outra(callable $funcao): void {
    echo 'Exec:';
    echo $funcao();
}

outra('qualquer');
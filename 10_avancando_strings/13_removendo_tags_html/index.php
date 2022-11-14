<?php

$textoHtml = "<p>Testando parágrafo.</p><div>Uma Div</div><p>Outro parágrafo</p>";

echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);

echo $salvarTextoBanco;
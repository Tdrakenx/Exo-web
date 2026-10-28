<?php
// Étape 9 : génère un élément de liste de navigation
function writeNavLine(string $title, string $href): string
{
    return '<li><a href="' . htmlspecialchars($href) . '">' . htmlspecialchars($title) . '</a></li>';
}
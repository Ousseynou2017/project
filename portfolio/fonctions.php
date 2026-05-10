<?php

/**
 * Vérifie qu'un champ n'est pas vide après nettoyage.
 * @param string $valeur  La valeur à vérifier
 * @return bool           true si valide, false sinon
 */
function champ_requis(string $valeur): bool {
    return !empty(trim($valeur));
}

/**
 * Nettoie une valeur pour l'afficher sans risque dans du HTML.
 * @param string $valeur  La valeur brute
 * @return string         La valeur nettoyée
 */
function nettoyer(string $valeur): string {
    return htmlspecialchars(trim($valeur));
}
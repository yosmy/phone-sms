<?php

namespace Yosmy\Phone\Sms;

/**
 * @di\service()
 */
class SanitizeText
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function sanitize(
        string $text
    ): string {
        $text = preg_replace("/[áàâãªä]/u","a", $text);
        $text = preg_replace("/[ÁÀÂÃÄ]/u","A", $text);
        $text = preg_replace("/[ÍÌÎÏ]/u","I", $text);
        $text = preg_replace("/[íìîï]/u","i", $text);
        $text = preg_replace("/[éèêë]/u","e", $text);
        $text = preg_replace("/[ÉÈÊË]/u","E", $text);
        $text = preg_replace("/[óòôõºö]/u","o", $text);
        $text = preg_replace("/[ÓÒÔÕÖ]/u","O", $text);
        $text = preg_replace("/[úùûü]/u","u", $text);
        $text = preg_replace("/[ÚÙÛÜ]/u","U", $text);
        $text = str_replace("ñ","n", $text);
        $text = str_replace("Ñ","N", $text);

        return $text;
    }
}
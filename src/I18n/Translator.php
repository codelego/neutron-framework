<?php
namespace Phpfox\Kernel\I18n;


class Translator implements TranslatorInterface
{
    /**
     * @var string
     */
    protected $locale = 'en';

    /**
     * @var TextDomain[]
     */
    protected $textDomains = [];

    /**
     * @var PluralRule[]
     */
    protected $plurals = [];

    /**
     * @var LoaderInterface
     */
    protected $loader;

    public function ensure($local, $domain)
    {

    }

    public function translate(
        $id,
        $domain = null,
        $locale = null,
        $data = null
    ) {

        if (null == $data) {
            return $this->getTextDomain($locale, $domain)->text($id);
        }


        return _sprintf($id, $data);
    }

    /**
     * @param string $locale
     * @param string $domain
     *
     * @return TextDomain
     */
    public function getTextDomain($locale, $domain)
    {
        return new TextDomain($locale, $domain);

    }

    public function plural(
        $id,
        $number,
        $domain = null,
        $locale = null,
        $data = null
    ) {
        $domain = $domain ?: '';
        $locale = $locale ?: $this->locale;
        $key = $locale . '.' . $domain;

        $id = (isset($this->textDomains[$key])
            ?: $this->textDomains[$key]
                = new TextDomain($locale))->textPlural($id, $number);


        if (!$data) {
            return $id;
        }

        return _sprintf($id, $data);
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }
}
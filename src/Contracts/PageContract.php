<?php

namespace PHPageBuilder\Contracts;

interface PageContract
{
    /**
     * Set the data stored for this page.
     *
     * @param array|null $data
     * @param bool $fullOverwrite       whether to fully overwrite or extend existing data
     */
    public function setData($data, $fullOverwrite = true);

    /**
     * Return all data stored for this page (page builder data and other data set via setData).
     *
     * @return array|null
     */
    public function getData();

    /**
     * Return the page builder data stored for this page.
     *
     * @return array|null
     */
    public function getBuilderData();

    /**
     * Return the id of this page.
     *
     * @return string
     */
    public function getId();

    /**
     * Return the layout (file name) of this page.
     *
     * @return string
     */
    public function getLayout();

    /**
     * Return the name of this page.
     *
     * @return string
     */
    public function getName();

    /**
     * Return the given translated field for this page, in the current or in the given language.
     *
     * @param string $field
     * @param string|null $locale
     * @return mixed|string|null
     */
    public function getTranslatedField(string $field, $locale = null);

    /**
     * Return the route of this page, in the current or in the given language.
     *
     * @param string|null $locale
     * @return mixed
     */
    public function getRoute($locale = null);

    /**
     * Get the value of the given property of this Page.
     *
     * @param $property
     * @return mixed|null
     */
    public function get($property);
}

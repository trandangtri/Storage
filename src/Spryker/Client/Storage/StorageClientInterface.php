<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\Storage;

interface StorageClientInterface
{

    /**
     * @param string $key
     * @param mixed $value
     *
     * @return mixed
     */
    public function set($key, $value);

    /**
     * @param array $items
     *
     * @return void
     */
    public function setMulti(array $items);

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function delete($key);

    /**
     * @param array $keys
     *
     * @return void
     */
    public function deleteMulti(array $keys);

    /**
     * @return int
     */
    public function deleteAll();

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * @param array $keys
     *
     * @return array
     */
    public function getMulti(array $keys);

    /**
     * @return array
     */
    public function getStats();

    /**
     * @return array
     */
    public function getAllKeys();

    /**
     * @param string $pattern
     *
     * @return array
     */
    public function getKeys($pattern);

    /**
     * @return void
     */
    public function resetAccessStats();

    /**
     * @return array
     */
    public function getAccessStats();

    /**
     * @return int
     */
    public function getCountItems();

}

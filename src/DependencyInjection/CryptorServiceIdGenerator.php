<?php
/**
 * This file is part of the Global Trading Technologies Ltd crypt-bundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author fduch <alex.medwedew@gmail.com>
 * Date: 08.01.16
 */
declare (strict_types=1);

namespace Gtt\Bundle\CryptBundle\DependencyInjection;

/**
 * Generates ids for cryptor services
 *
 * @author fduch
 */
class CryptorServiceIdGenerator
{
    /**
     * Defines pattern for encryptor services
     */
    private const ENCRYPTOR_PATTERN = 'gtt.crypt.encryptor.<name>';

    /**
     * Defines pattern for decryptor services
     */
    private const DECRYPTOR_PATTERN = 'gtt.crypt.decryptor.<name>';

    /**
     * Generates encryptor service id by its name
     *
     * @param string $name cryptor name
     *
     * @return string
     */
    public static function generateEncryptorId(string $name): string
    {
        return str_replace('<name>', $name, self::ENCRYPTOR_PATTERN);
    }

    /**
     * Generates decryptor service id by its name
     *
     * @param string $name cryptor name
     *
     * @return string
     */
    public static function generateDecryptorId(string $name): string
    {
        return str_replace('<name>', $name, self::DECRYPTOR_PATTERN);
    }
}

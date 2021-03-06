<?php
/**
 * This file is part of the Global Trading Technologies Ltd crypt-bundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * (c) fduch <alex.medwedew@gmail.com>
 *
 * @date 21.12.15
 */
declare (strict_types=1);

namespace Gtt\Bundle\CryptBundle\Bridge\Rsa;

use Gtt\Bundle\CryptBundle\Encryption\EncryptorInterface;
use Zend\Crypt\PublicKey\Rsa as ZendRsa;

/**
 * Rsa encryptor
 *
 * @author fduch <alex.medwedew@gmail.com>
 */
class RsaEncryptor implements EncryptorInterface
{
    /**
     * Zend rsa implementation
     *
     * @var ZendRsa
     */
    private $zendRsa;

    /**
     * OpenSSL encryption padding
     *
     * @var int
     */
    private $padding;

    /**
     * RsaEncryptor constructor
     *
     * @param ZendRsa  $zendRsa Zend rsa implementation
     * @param int|null $padding Padding
     */
    public function __construct(ZendRsa $zendRsa, int $padding = null)
    {
        $this->zendRsa = $zendRsa;
        $this->padding = $padding;
    }

    /**
     * {@inheritdoc}
     */
    public function encrypt(string $value): string
    {
        return $this->zendRsa->encrypt($value, null, $this->padding);
    }
}

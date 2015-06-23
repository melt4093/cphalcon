<?php
/**
 * InclusionInTest.php
 * \Phalcon\Text\InclusionInTest
 *
 * Tests the Phalcon\Acl component
 *
 * Phalcon Framework
 *
 * @copyright (c) 2011-2014 Phalcon Team
 * @link      http://www.phalconphp.com
 * @author    Andres Gutierrez <andres@phalconphp.com>
 * @author    Nikolaos Dimopoulos <nikos@phalconphp.com>
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file docs/LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalconphp.com
 * so that we can send you a copy immediately.
 */

namespace Phalcon\Tests\unit\Phalcon\Validation\Validator;

use \Phalcon\Tests\unit\Phalcon\_Helper\TestsBase as TBase;

class InclusionInTest extends TBase
{
    /**
     * Tests the creation of an Acl Role (name)
     *
     * @author Nikolaos Dimopoulos <nikos@phalconphp.com>
     * @since  2014-10-03
     */
    public function testAllowEmpty()
    {
        $this->specify(
            "passing allowEmpty = false should trigger a validation error",
            function () {

        		$validation = new \Phalcon\Validation();
        		$validation->add('test', new \Phalcon\Validation\Validator\InclusionIn([
        			'domain' => ['A', 'B', 'C'],
                    'allowEmpty' => false
                ]));
                $messages=$validation->validate(['test' => '']);
                expect(count($messages))->equals(1);
            }
        );
    }
}

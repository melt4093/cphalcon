<?php
/**
 * InclusionInTest.php
 * \Phalcon\Text\InclusionInTest
 *
 * Tests the Phalcon\Validation/Validator/InclusionIn component
 *
 * Phalcon Framework
 *
 * @copyright (c) 2011-2014 Phalcon Team
 * @link      http://www.phalconphp.com
 * @author    Danny Melton <melt4093@gmail.com>
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
     * Tests that when allowEmpty is passed as false, that validation fails when
     * an empty value is validated
     *
     * @author Danny Melton <melt4093@gmail.com>
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

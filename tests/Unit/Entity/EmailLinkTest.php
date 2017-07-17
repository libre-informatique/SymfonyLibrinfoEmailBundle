<?php

/*
 * This file is part of the Blast Project package.
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU LGPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Librinfo\EmailBundle\Entity\Test\Unit;

/*
 * Generated by PHPUnit_SkeletonGenerator on 2017-05-12 at 11:44:02.
 * Modified by Quotidianus
 */
use PHPUnit\Framework\TestCase;
use Librinfo\EmailBundle\Entity\EmailLink;

class EmailLinkTest extends TestCase
{
    /**
     * @var EmailLink
     */
    protected $emaillinktest;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->emaillinktest = new EmailLink();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::setDestination
     */
    public function testSetDestination()
    {
        $this->emaillinktest->setDestination('http//:destination.link');
        $this->assertEquals('http//:destination.link', $this->emaillinktest->getDestination());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::getDestination
     */
    public function testGetDestination()
    {
        $destination = $this->emaillinktest->getDestination();
        $this->assertEquals($destination, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::setAddress
     */
    public function testSetAddress()
    {
        $this->emaillinktest->setAddress('http//:address.link');
        $this->assertEquals('http//:address.link', $this->emaillinktest->getAddress());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::getAddress
     */
    public function testGetAddress()
    {
        $address = $this->emaillinktest->getAddress();
        $this->assertEquals($address, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::setDate
     */
    public function testSetDate()
    {
        $date = new \DateTime('2400-02-29 00:00:00');
        $this->emaillinktest->setDate($date);
        $this->assertEquals($date, $this->emaillinktest->getDate());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::getDate
     */
    public function testGetDate()
    {
        $date = $this->emaillinktest->getDate();
        $this->assertEquals($date, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::setEmail
     */
    public function testSetEmail()
    {
        $email = new \Librinfo\EmailBundle\Entity\Email();
        $this->emaillinktest->setEmail($email);
        $this->assertEquals($email, $this->emaillinktest->getEmail());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\EmailLink::getEmail
     */
    public function testGetEmail()
    {
        $email = $this->emaillinktest->getEmail();
        $this->assertNull($email);
    }
}

/*
 * NB: This class uses also a Trait (BaseEntity) that will be tested in its own bundle
 */

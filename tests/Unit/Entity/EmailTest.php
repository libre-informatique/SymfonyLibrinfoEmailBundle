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

namespace Librinfo\EmailBundle\tests\Functional;

/*
 * Generated by PHPUnit_SkeletonGenerator on 2017-05-04 at 15:18:32.
 * Modified by Quotidianus
 */
use PHPUnit\Framework\TestCase;
use Librinfo\EmailBundle\Entity\Email;

class EmailTest extends TestCase
{
    /**
     * @var Email
     */
    protected $emailtest;
    protected $emaillinkmock;
    protected $emailreceiptmock;
    protected $emailattachmentmock;
    protected $emailattachmentsmock;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->emailtest = new Email();
        $this->emaillinkmock = $this->createMock('Librinfo\EmailBundle\Entity\EmailLink');
        $this->emailreceiptmock = $this->createMock('Librinfo\EmailBundle\Entity\EmailReceipt');
        $this->emailattachmentmock = $this->createMock('Librinfo\MediaBundle\Entity\File');
        $this->emailattachmentsmock = $this->createMock('Doctrine\Common\Collections\Collection');
        /* @todo
         *  Add "$this->isTest = false;" in function __construct() of Email class
         *  Add "$this->tracking = false;" in function __construct() of Email class
         */
        $this->emailtest->setIsTest(false);
        $this->emailtest->setTracking(false);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setFieldFrom
     */
    public function testSetFieldFrom()
    {
        $this->emailtest->setFieldFrom('you@me.us');
        $this->assertEquals('you@me.us', $this->emailtest->getFieldFrom());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getFieldFrom
     */
    public function testGetFieldFrom()
    {
        $from = $this->emailtest->getFieldFrom();
        $this->assertEquals($from, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setFieldTo
     */
    public function testSetFieldTo()
    {
        $this->emailtest->setFieldTo('me@you.us');
        $this->assertEquals('me@you.us', $this->emailtest->getFieldTo());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getFieldTo
     */
    public function testGetFieldTo()
    {
        $to = $this->emailtest->getFieldTo();
        $this->assertEquals($to, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setFieldCc
     */
    public function testSetFieldCc()
    {
        $this->emailtest->setFieldCc('me@he.us');
        $this->assertEquals('me@he.us', $this->emailtest->getFieldCc());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getFieldCc
     */
    public function testGetFieldCc()
    {
        $tocc = $this->emailtest->getFieldCc();
        $this->assertEquals($tocc, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setFieldBcc
     */
    public function testSetFieldBcc()
    {
        $this->emailtest->setFieldBcc('me@they.us');
        $this->assertEquals('me@they.us', $this->emailtest->getFieldBcc());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getFieldBcc
     */
    public function testGetFieldBcc()
    {
        $tobcc = $this->emailtest->getFieldBcc();
        $this->assertEquals($tobcc, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setFieldSubject
     */
    public function testSetFieldSubject()
    {
        $this->emailtest->setFieldSubject('Email subject');
        $this->assertEquals('Email subject', $this->emailtest->getFieldSubject());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getFieldSubject
     */
    public function testGetFieldSubject()
    {
        $subject = $this->emailtest->getFieldSubject();
        $this->assertEquals($subject, '<no subject>');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setContent
     */
    public function testSetContent()
    {
        $this->emailtest->setContent('Email html content');
        $this->assertEquals('Email html content', $this->emailtest->getContent());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getContent
     */
    public function testGetContent()
    {
        $content = $this->emailtest->getContent();
        $this->assertEquals($content, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setTextContent
     */
    public function testSetTextContent()
    {
        $this->emailtest->setTextContent('Email text content');
        $this->assertEquals('Email text content', $this->emailtest->getTextContent());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getTextContent
     */
    public function testGetTextContent()
    {
        $textcontent = $this->emailtest->getTextContent();
        $this->assertEquals($textcontent, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setSent
     */
    public function testSetSent()
    {
        $this->emailtest->setSent(true);
        $this->assertTrue($this->emailtest->getSent());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getSent
     */
    public function testGetSent()
    {
        $sent = $this->emailtest->getSent();
        $this->assertFalse($sent);
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::addAttachment
     * @covers \Librinfo\EmailBundle\Entity\Email::removeAttachment
     * @covers \Librinfo\EmailBundle\Entity\Email::getAttachments
     * @covers \Librinfo\EmailBundle\Entity\Email::setAttachments
     */
    public function testAddAttachmentRemoveAttachmentGetAttachmentsSetAttachments()
    {
        $this->emailtest->addAttachment($this->emailattachmentmock);
        $this->assertArraySubset(array($this->emailattachmentmock), $this->emailtest->getAttachments());
        $this->assertTrue($this->emailtest->removeAttachment($this->emailattachmentmock));
        $this->emailtest->removeAttachment($this->emailattachmentmock);
        $this->assertFalse($this->emailtest->removeAttachment($this->emailattachmentmock));
        $this->assertNotContains(array($this->emailattachmentmock), $this->emailtest->getAttachments());
        $this->emailtest->setAttachments($this->emailattachmentsmock);
        $this->assertEquals($this->emailattachmentsmock, $this->emailtest->getAttachments());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setIsTest
     */
    public function testSetIsTest()
    {
        $this->emailtest->setIsTest(true);
        $this->assertTrue($this->emailtest->getIsTest());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getIsTest
     */
    public function testGetIsTest()
    {
        $istest = $this->emailtest->getIsTest();
        $this->assertFalse($istest);
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getTestAddress
     */
    public function testGetTestAddress()
    {
        $testaddress = $this->emailtest->getTestAddress();
        $this->assertEquals($testaddress, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setTestAddress
     */
    public function testSetTestAddress()
    {
        $this->emailtest->setTestAddress('Email addresstest');
        $this->assertEquals('Email addresstest', $this->emailtest->getTestAddress());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getTemplate
     */
    public function testGetTemplate()
    {
        $template = $this->emailtest->getTemplate();
        $this->assertEquals($template, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setTemplate
     */
    public function testSetTemplate()
    {
        $this->emailtest->setTemplate('Email template');
        $this->assertEquals('Email template', $this->emailtest->getTemplate());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setIsTemplate
     */
    public function testSetIsTemplate()
    {
        $this->emailtest->setIsTemplate(true);
        $this->assertTrue($this->emailtest->getIsTemplate());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getIsTemplate
     */
    public function testGetIsTemplate()
    {
        $istemplate = $this->emailtest->getIsTemplate();
        $this->assertFalse($istemplate);
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getNewTemplateName
     */
    public function testGetNewTemplateName()
    {
        $newtemplatename = $this->emailtest->getNewTemplateName();
        $this->assertEquals($newtemplatename, '');
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setNewTemplateName
     */
    public function testSetNewTemplateName()
    {
        $this->emailtest->setNewTemplateName('New template name');
        $this->assertEquals('New template name', $this->emailtest->getNewTemplateName());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::setTracking
     */
    public function testSetTracking()
    {
        $this->emailtest->setTracking(true);
        $this->assertTrue($this->emailtest->getTracking());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::getTracking
     */
    public function testGetTracking()
    {
        $tracking = $this->emailtest->getTracking();
        $this->assertFalse($tracking);
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::addReceipt
     * @covers \Librinfo\EmailBundle\Entity\Email::removeReceipt
     * @covers \Librinfo\EmailBundle\Entity\Email::getReceipts
     */
    public function testAddReceiptRemoveReceiptGetReceipts()
    {
        $this->emailtest->addReceipt($this->emailreceiptmock);
        $this->assertArraySubset(array($this->emailreceiptmock), $this->emailtest->getReceipts());
        $this->emailtest->removeReceipt($this->emailreceiptmock);
        $this->assertNotContains(array($this->emailreceiptmock), $this->emailtest->getReceipts());
    }

    /**
     * @covers \Librinfo\EmailBundle\Entity\Email::addLink
     * @covers \Librinfo\EmailBundle\Entity\Email::removeLink
     * @covers \Librinfo\EmailBundle\Entity\Email::getLinks
     */
    public function testAddLinkRemoveLinkGetLinks()
    {
        $this->emailtest->addLink($this->emaillinkmock);
        $this->assertArraySubset(array($this->emaillinkmock), $this->emailtest->getLinks());
        $this->emailtest->removeLink($this->emaillinkmock);
        $this->assertNotContains(array($this->emaillinkmock), $this->emailtest->getLinks());
    }
}

/*
* NB: This class uses also some Traits that will be tested in their own bundles
 * The functions addLibrinfoFile, etc. are not tested as it seems that they are about to be interchanged by addAttachment, etc.
 * An issue has been proposed for this on the forked project.
*/

<?php

namespace Kunstmaan\NodeBundle\Tests\Entity;

use Kunstmaan\NodeBundle\Entity\SEO;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-18 at 12:21:52.
 */
class SEOTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SEO
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new SEO();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getMetaAuthor
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setMetaAuthor
     */
    public function testGetSetMetaAuthor()
    {
        $this->object->setMetaAuthor('Author Name');
        $this->assertEquals('Author Name', $this->object->getMetaAuthor());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getMetaDescription
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setMetaDescription
     */
    public function testGetSetMetaDescription()
    {
        $this->object->setMetaDescription('Meta Description');
        $this->assertEquals('Meta Description', $this->object->getMetaDescription());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getMetaKeywords
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setMetaKeywords
     */
    public function testGetSetMetaKeywords()
    {
        $this->object->setMetaKeywords('Meta Keywords');
        $this->assertEquals('Meta Keywords', $this->object->getMetaKeywords());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getMetaRobots
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setMetaRobots
     */
    public function testGetSetMetaRobots()
    {
        $this->object->setMetaRobots('noindex, nofollow');
        $this->assertEquals('noindex, nofollow', $this->object->getMetaRobots());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getMetaRevised
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setMetaRevised
     */
    public function testGetSetMetaRevised()
    {
        $this->object->setMetaRevised('18/09/2012');
        $this->assertEquals('18/09/2012', $this->object->getMetaRevised());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getExtraMetadata
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setExtraMetadata
     */
    public function testGetSetExtraMetadata()
    {
        $this->object->setExtraMetadata('Extra Metadata');
        $this->assertEquals('Extra Metadata', $this->object->getExtraMetadata());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setOgDescription
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getOgDescription
     */
    public function testGetSetOgDescription()
    {
        $this->object->setOgDescription('OpenGraph description');
        $this->assertEquals('OpenGraph description', $this->object->getOgDescription());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setOgImage
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getOgImage
     */
    public function testGetSetOgImage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setOgTitle
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getOgTitle
     */
    public function testGetSetOgTitle()
    {
        $this->object->setOgTitle('OpenGraph title');
        $this->assertEquals('OpenGraph title', $this->object->getOgTitle());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setOgType
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getOgType
     */
    public function testGetSetOgType()
    {
        $this->object->setOgType('website');
        $this->assertEquals('website', $this->object->getOgType());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getCimKeyword
     * @covers Kunstmaan\NodeBundle\Entity\SEO::setCimKeyword
     */
    public function testGetSetCimKeyword()
    {
        $this->object->setCimKeyword('CIM keyword');
        $this->assertEquals('CIM keyword', $this->object->getCimKeyword());
        $this->object->setCimKeyword('CIM keyword should be limited to 24 characters');
        $this->assertEquals('CIM keyword should be li', $this->object->getCimKeyword());
    }

    /**
     * @covers Kunstmaan\NodeBundle\Entity\SEO::getDefaultAdminType
     */
    public function testGetDefaultAdminType()
    {
        $this->assertInstanceOf('Kunstmaan\NodeBundle\Form\SEOType', $this->object->getDefaultAdminType());
    }
}
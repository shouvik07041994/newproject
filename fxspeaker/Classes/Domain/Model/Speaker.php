<?php
namespace F6\Fxspeaker\Domain\Model;

/***
 *
 * This file is part of the "speaker" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 shouvik <s@gmail.com>, f6
 *
 ***/

/**
 * Speaker
 */
class Speaker extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * speakername
     *
     * @var string
     */
    protected $speakername = '';

    /**
     * speakerimage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $speakerimage = null;

    /**
     * speakerdes
     *
     * @var string
     */
    protected $speakerdes = '';

    /**
     * flag
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $flag = null;

    /**
     * Returns the speakername
     *
     * @return string $speakername
     */
    public function getSpeakername()
    {
        return $this->speakername;
    }

    /**
     * Sets the speakername
     *
     * @param string $speakername
     * @return void
     */
    public function setSpeakername($speakername)
    {
        $this->speakername = $speakername;
    }

    /**
     * Returns the speakerimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $speakerimage
     */
    public function getSpeakerimage()
    {
        return $this->speakerimage;
    }

    /**
     * Sets the speakerimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $speakerimage
     * @return void
     */
    public function setSpeakerimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $speakerimage)
    {
        $this->speakerimage = $speakerimage;
    }

    /**
     * Returns the speakerdes
     *
     * @return string $speakerdes
     */
    public function getSpeakerdes()
    {
        return $this->speakerdes;
    }

    /**
     * Sets the speakerdes
     *
     * @param string $speakerdes
     * @return void
     */
    public function setSpeakerdes($speakerdes)
    {
        $this->speakerdes = $speakerdes;
    }

    /**
     * Returns the flag
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $flag
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Sets the flag
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $flag
     * @return void
     */
    public function setFlag(\TYPO3\CMS\Extbase\Domain\Model\FileReference $flag)
    {
        $this->flag = $flag;
    }
}

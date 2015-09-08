<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Presenters\RevisionDisplayers\Page;

/**
 * This is the show title displayer class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ShowTitleDisplayer extends AbstractDisplayer
{
    /**
     * Get the change description from the context of
     * the change being made by the current user.
     *
     * @return string
     */
    protected function current()
    {
        if ($this->wrappedObject->new_value) {
            return trans('pages.unhid_title_of').$this->name();
        }

        return trans('pages.hid_title_of').$this->name();
    }

    /**
     * Get the change description from the context of
     * the change not being made by the current user.
     *
     * @return string
     */
    protected function external()
    {
        if ($this->wrappedObject->new_value) {
            return trans('pages.user_unhid_title_of').$this->name();
        }

        return trans('pages.user_hid_title_of').$this->name();
    }
}

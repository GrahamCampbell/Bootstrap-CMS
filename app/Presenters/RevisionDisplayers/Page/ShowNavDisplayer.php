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
 * This is the show nav displayer class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ShowNavDisplayer extends AbstractDisplayer
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
            return  trans('pages.added_page_to_nav', [ 'name' => $this->name(false)]);
        }

        return trans('pages.removed_page_to_nav', [ 'name' => $this->name(false)]);
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
            return  trans('pages.user_added_page_to_nav', [ 'name' => $this->name(false)]);
        }

        return trans('pages.user_removed_page_to_nav', [ 'name' => $this->name(false)]);
    }
}

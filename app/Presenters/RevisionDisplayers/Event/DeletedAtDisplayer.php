<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Presenters\RevisionDisplayers\Event;

/**
 * This is the deleted at displayer class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class DeletedAtDisplayer extends AbstractDisplayer
{
    /**
     * Get the change title.
     *
     * @return string
     */
    public function title()
    {
        return trans('events.deleted_event');
    }

    /**
     * Get the change description from the context of
     * the change being made by the current user.
     *
     * @return string
     */
    protected function current()
    {
        return trans('events.deleted_event_called').$this->name();
    }

    /**
     * Get the change description from the context of
     * the change not being made by the current user.
     *
     * @return string
     */
    protected function external()
    {
        return trans('events.user_deleted_event_called').$this->name();
    }
}

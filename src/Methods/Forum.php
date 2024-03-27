<?php

namespace Telegram\Bot\Methods;

use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Message as MessageObject;
use Telegram\Bot\Traits\Http;

/**
 * Class Forum.
 *
 * @mixin Http
 */
trait Forum
{
    /**
     * Create forum topics.
     *
     * <code>
     * $params = [
     *       'chat_id'              => '',  // int|string - Required. Unique identifier for the target chat or username of the target supergroup (in the format "@supergroupusername")
     *       'name'                 => '',  // string     - Required. Topic name, 1-128 characters
     *       'icon_color'           => '',  // int        - (Optional). Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     *       'icon_custom_emoji_id' => '',  // string     - (Optional). Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#createforumtopic
     *
     * @throws TelegramSDKException
     */
    public function createForumTopic(array $params): MessageObject
    {
        $response = $this->post('createForumTopic', $params);

        return new MessageObject($response->getDecodedBody());
    }

    /**
     * Edit forum topics.
     *
     * <code>
     * $params = [
     *       'chat_id'              => '',  // int|string - Required. Unique identifier for the target chat or username of the target supergroup (in the format "@supergroupusername")
     *       'message_thread_id'    => '',  // int        - Required. Unique identifier for the target message thread of the forum topic
     *       'name'                 => '',  // string     - (Optional). Topic name, 1-128 characters
     *       'icon_custom_emoji_id' => '',  // string     - (Optional). Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#editforumtopic
     *
     * @throws TelegramSDKException
     */
    public function editForumTopic(array $params): MessageObject
    {
        $response = $this->post('editForumTopic', $params);

        return new MessageObject($response->getDecodedBody());
    }

    /**
     * Close forum topics.
     *
     * <code>
     * $params = [
     *       'chat_id'              => '',  // int|string - Required. Unique identifier for the target chat or username of the target supergroup (in the format "@supergroupusername")
     *       'message_thread_id'    => '',  // int        - Required. Unique identifier for the target message thread of the forum topic
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#closeforumtopic
     *
     * @throws TelegramSDKException
     */
    public function closeForumTopic(array $params): MessageObject
    {
        $response = $this->post('closeForumTopic', $params);

        return new MessageObject($response->getDecodedBody());
    }

    /**
     * Reopen forum topics.
     *
     * <code>
     * $params = [
     *       'chat_id'              => '',  // int|string - Required. Unique identifier for the target chat or username of the target supergroup (in the format "@supergroupusername")
     *       'message_thread_id'    => '',  // int        - Required. Unique identifier for the target message thread of the forum topic
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#reopenforumtopic
     *
     * @throws TelegramSDKException
     */
    public function reopenForumTopic(array $params): MessageObject
    {
        $response = $this->post('reopenForumTopic', $params);

        return new MessageObject($response->getDecodedBody());
    }

    /**
     * Delete forum topics.
     *
     * <code>
     * $params = [
     *       'chat_id'              => '',  // int|string - Required. Unique identifier for the target chat or username of the target supergroup (in the format "@supergroupusername")
     *       'message_thread_id'    => '',  // int        - Required. Unique identifier for the target message thread of the forum topic
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#deleteforumtopic
     *
     * @throws TelegramSDKException
     */
    public function deleteForumTopic(array $params): MessageObject
    {
        $response = $this->post('deleteForumTopic', $params);

        return new MessageObject($response->getDecodedBody());
    }
}

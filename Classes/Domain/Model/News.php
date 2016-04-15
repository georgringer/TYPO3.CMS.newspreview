<?php

namespace GeorgRinger\Newspreview\Domain\Model;


class News extends \GeorgRinger\News\Domain\Model\News {

	/**
	 * @return array
	 */
	public function getFalPreviewAndFull() {
		return $this->getFalMediaPreviewsByType(1);
	}

	/**
	 * @return array
	 */
	public function getFalPreviewOnly() {
		return $this->getFalMediaPreviewsByType(2);
	}

	protected function getFalMediaPreviewsByType($type) {
		$items = array();
		if ($this->getFalMedia()) {
			/** @var $mediaItem \GeorgRinger\News\Domain\Model\Media */
			foreach ($this->getFalMedia() as $mediaItem) {
				if ((int)$mediaItem->getOriginalResource()->getProperty('showinpreview') === $type) {
					$items[] = $mediaItem;
				}
			}
		}
		return $items;
	}
}
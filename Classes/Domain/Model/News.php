<?php

class Tx_Newspreview_Domain_Model_News extends Tx_News_Domain_Model_News {

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
		if ($this->getFalMedia()) {
			$items = array();
			/** @var $mediaItem Tx_News_Domain_Model_FileReference */
			foreach ($this->getFalMedia() as $mediaItem) {
				if ((int)$mediaItem->getOriginalResource()->getProperty('showinpreview') === $type) {
					$items[] = $mediaItem;
				}
			}
		}
		return $items;
	}
}


?>

<?php

namespace Ant\MetadataBundle\Model;
/**
 * @author pc
 */
abstract class Page implements PageInterface {

	protected $id;

	protected $publicatedAt;

	protected $title;

	protected $description;

	protected $slug;

	protected $content;

	protected $keywords;

	protected $updatedAt;

	public function __construct() {
		$this->publicatedAt = new \DateTime('now');
	}
	
	public function getPublicatedAt() {
		return $this->publicatedAt;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setPublicatedAt($publicatedAt) {
		$this->publicatedAt = $publicatedAt;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getSlug() {
		return $this->slug;
	}

	public function setSlug($slug) {
		$this->slug = $slug;
	}

	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
	}

	public function getKeywords() {
		return $this->keywords;
	}

	public function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	public function getUpdatedAt() {
		return $this->updatedAt;
	}

	public function setUpdatedAt($updatedAt) {
		$this->updatedAt = $updatedAt;
	}

}

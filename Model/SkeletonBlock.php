<?php
/**
 * SkeletonBlock Model
 *
 * @property Block $Block
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Skeleton.Model
 */

App::uses('SkeletonAppModel', 'Skeleton.Model');

/**
 * SkeletonBlock Model
 *
 * @property Block $Block
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Skeleton.Model
 */
class SkeletonBlock extends SkeletonAppModel {

/**
 * Use database config
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var string
 */
	public $useDbConfig = 'master';

/**
 * Validation rules
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $validate = array(
		'block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
	);

/**
 * belongsTo associations
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $belongsTo = array(
		'Block' => array(
			'className' => 'Block',
			'foreignKey' => 'block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SkeletonSingle' => array(
			'className' => 'SkeletonSingle',
			'foreignKey' => 'SkeletonSnakeName_block_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SkeletonSinglePartSetting' => array(
			'className' => 'SkeletonSinglePartSetting',
			'foreignKey' => 'SkeletonSnakeName_block_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SkeletonSingleSetting' => array(
			'className' => 'SkeletonSingleSetting',
			'foreignKey' => 'SkeletonSnakeName_block_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

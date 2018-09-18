<?php
/**
 * Generated By Subapp\Orm Generator
 * @author Ivan Hontarenko
 *
 * IMPORTANT:
 *      Don't edit this file!
 *      This file was generated automatically, and it can happen again
 *      and as a consequence it will overwrite your changes.
 */

namespace CvLand\PhpDatabaseLayer\Base;

use Subapp\Orm\Core\Repository;
use Subapp\Orm\Query\Statement\Comparison\Cmp;
use Subapp\Orm\Query\Statement\OrderBy;
use CvLand\PhpDatabaseLayer\SystemUserTokenRepository;
use CvLand\PhpDatabaseLayer\SystemUserToken;
use Subapp\Orm\Core\ResultSet\ResultSetIterator;

/**
 * Magic methods for query-builder and access to the fields data
 *
 * @method SystemUserToken findOneById($id);
 * @method ResultSetIterator findById($id);
 * @method SystemUserTokenRepository filterById($id, $cmp = Cmp::EQ);
 * @method SystemUserTokenRepository orderById($vector = OrderBy::ASC);
 * @method SystemUserTokenRepository groupById();
 * @method SystemUserToken findOneByUserId($userId);
 * @method ResultSetIterator findByUserId($userId);
 * @method SystemUserTokenRepository filterByUserId($userId, $cmp = Cmp::EQ);
 * @method SystemUserTokenRepository orderByUserId($vector = OrderBy::ASC);
 * @method SystemUserTokenRepository groupByUserId();
 * @method SystemUserToken findOneByToken($token);
 * @method ResultSetIterator findByToken($token);
 * @method SystemUserTokenRepository filterByToken($token, $cmp = Cmp::EQ);
 * @method SystemUserTokenRepository orderByToken($vector = OrderBy::ASC);
 * @method SystemUserTokenRepository groupByToken();
 * @method SystemUserToken findOneByCreated($created);
 * @method ResultSetIterator findByCreated($created);
 * @method SystemUserTokenRepository filterByCreated($created, $cmp = Cmp::EQ);
 * @method SystemUserTokenRepository orderByCreated($vector = OrderBy::ASC);
 * @method SystemUserTokenRepository groupByCreated();
*/

class BaseSystemUserTokenRepository extends Repository
{

    /**
    * BaseSystemUserTokenRepository constructor.
    */
    public function __construct()
    {
        parent::__construct(SystemUserToken::class);
    }

    /**
    * @param integer $id Identifier
    * @return SystemUserToken Entity instance
    */
    public static function findByPK($id)
    {
        /** @var SystemUserToken $entity */
        $repository = new SystemUserTokenRepository();
        $entity = $repository->retrieve($id);

        return $entity;
    }

}
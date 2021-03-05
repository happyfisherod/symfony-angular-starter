<?php
declare(strict_types=1);

namespace App\Tests\Repository;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class UserRepositoryTest
 *
 * @package App\Tests\Repository
 * @covers \App\Repository\UserRepository
 */
class UserRepositoryTest extends KernelTestCase
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $kernel = self::bootKernel();
        $this->em = $kernel->getContainer()->get('doctrine')->getManager();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null;
    }

    /**
     * @dataProvider provideUsernames
     * @param string|null $username
     * @param bool $expected
     */
    public function testFindOneByUsername(?string $username, bool $expected): void
    {
        $user = $this->em->getRepository(User::class)->findOneByUsername($username);
        if ($expected) {
            $this->assertInstanceOf(User::class, $user);
        } else {
            $this->assertNull($user);
        }
    }

    /**
     * @return array[]
     */
    public function provideUsernames(): array
    {
        return [
            ['super', true],
            ['admin', true],
            ['user', true],
            ['non_existing_username', false],
        ];
    }
}

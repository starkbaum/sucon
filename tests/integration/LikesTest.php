<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class LikesTest extends TestCase
{
    use DatabaseTransactions;

    protected $course;
    protected $user;

    public function setUp()
    {
        @session_start();
        parent::setUp();

        $this->course = factory(App\Course::class)->create();
        $user = factory(App\User::class)->create();
        $this->user = $user;
        $this->actingAs($this->user);
    }

    /** @test */
    public function a_user_can_like_a_course()
    {
        $this->course->like();

        $this->seeInDatabase('likes', [
            'user_id'       => $this->user->id,
            'likeable_id'   => $this->course->id,
            'likeable_type' => get_class($this->course),
        ]);

        $this->assertTrue($this->course->isLiked());
    }

    /** @test */
    public function a_user_can_unlike_a_course()
    {
        $this->course->like();
        $this->course->unlike();

        $this->NotSeeInDatabase('likes', [
            'user_id'       => $this->user->id,
            'likeable_id'   => $this->course->id,
            'likeable_type' => get_class($this->course),
        ]);
        $this->assertFalse($this->course->isLiked());
    }

    /** @test */
    public function a_user_may_toggle_a_courses_like_status()
    {
        $this->course->toggleLike();
        $this->assertTrue($this->course->isLiked());

        $this->course->toggleLike();
        $this->assertFalse($this->course->isLiked());
    }

    /** @test */
    public function a_course_knows_how_many_likes_it_has()
    {
        $this->course->toggleLike();
        $this->assertEquals(1, $this->course->likesCount);
    }
}

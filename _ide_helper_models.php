<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Survey
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property int $status
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $expire_date
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey query()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereUserId($value)
 */
	class Survey extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SurveyAnswer
 *
 * @property int $id
 * @property int $survey_id
 * @property string|null $start_date
 * @property string|null $end_date
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAnswer whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAnswer whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAnswer whereSurveyId($value)
 */
	class SurveyAnswer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SurveyQuestion
 *
 * @property int $id
 * @property string $type
 * @property string $question
 * @property string|null $description
 * @property string|null $data
 * @property int $survey_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestion whereUpdatedAt($value)
 */
	class SurveyQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SurveyQuestionAnswer
 *
 * @property int $id
 * @property int $survey_question_id
 * @property int $survey_answer_id
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer whereSurveyAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer whereSurveyQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyQuestionAnswer whereUpdatedAt($value)
 */
	class SurveyQuestionAnswer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}


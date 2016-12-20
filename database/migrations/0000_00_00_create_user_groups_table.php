<?php

/**
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class UserGroupsTable
 */
final class UserGroupsTable extends Migration
{
    use MigrationTrait;

    /** @var string  */
    protected $table = 'user_groups';

    /**
     * Run the migrations.
     */
    public function up()
    {
        $this->schemaBuilder($this->getConnection())
            ->create($this->table, function (Blueprint $table) {
                $table->unsignedInteger('user_id');
                $table->unsignedInteger('group_id');
                $table->unique(['user_id', 'group_id'], 'u_idx_user_groups_00');
            });
    }
}

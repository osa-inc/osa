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
 * Class TagsTable
 */
final class TagsTable extends Migration
{
    use MigrationTrait;

    /** @var string  */
    protected $table = 'tags';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schemaBuilder($this->getConnection())
            ->create($this->table, function (Blueprint $table) {
            $table->increments('tag_id');
            $table->string('name', 255)->unique();
            $table->string('display_title')->nullable();
            $table->timestamps();
        });
    }
}

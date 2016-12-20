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

use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Builder;

/**
 * Class MigrationTrait
 */
trait MigrationTrait
{
    /** @var callable */
    protected $callback;

    /**
     * @param string|null $connectionName
     *
     * @return Connection
     */
    public function databaseManager($connectionName): Connection
    {
        return app('db')->connection($connectionName);
    }

    /**
     * @param $connectionName
     *
     * @return Builder
     */
    protected function schemaBuilder($connectionName): Builder
    {
        return $this->databaseManager($connectionName)->getSchemaBuilder();
    }

    public function down()
    {
        $this->disableForeignKeyCheck();
        $this->schemaBuilder($this->getConnection())->drop($this->table);
        $this->enableForeignKeyCheck();
    }

    /**
     * @return bool|null
     */
    protected function disableForeignKeyCheck()
    {
        switch (app('db')->getDriverName()) {
            case "sqlite":
                return app('db')->statement('PRAGMA foreign_keys = OFF');
                break;
            case "mysql":
                return app('db')->statement('SET FOREIGN_KEY_CHECKS = 0');
                break;
            case 'sqlsrv':
                return app('db')->statement("ALTER TABLE {$this->table} NOCHECK CONSTRAINT ALL");
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * @return bool|null
     */
    protected function enableForeignKeyCheck()
    {
        switch (app('db')->getDriverName()) {
            case "sqlite":
                return app('db')->statement('PRAGMA foreign_keys = ON');
                break;
            case "mysql":
                return app('db')->statement('SET FOREIGN_KEY_CHECKS = 1');
                break;
            case 'sqlsrv':
                return app('db')->statement("ALTER TABLE {$this->table} CHECK CONSTRAINT ALL");
                break;
            default:
                return null;
                break;
        }
    }
}

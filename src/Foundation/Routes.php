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

namespace Osa\Component\Foundation;

use Illuminate\Contracts\Routing\Registrar;

/**
 * Class Routes
 */
final class Routes
{
    /** @var Registrar */
    protected $registrar;

    /**
     * Routes constructor.
     *
     * @param Registrar $registrar
     */
    public function __construct(Registrar $registrar)
    {
        $this->registrar = $registrar;
    }

    /**
     * application routes registration
     */
    public function register()
    {
        $this->registrar->group(['middleware' => 'web'], function (Registrar $registrar) {
            $registrar->get('/init', [
                'uses' => 'Osa\Component\Controllers\InitializeController@invoke',
                'as'   => 'app.init',
            ]);
        });
    }
}

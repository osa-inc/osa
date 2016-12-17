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

namespace Osaapp\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Class Kernel
 */
class Kernel extends ConsoleKernel
{
    /**
     * {@inheritdoc}
     */
    protected function bootstrappers(): array
    {
        return [
            'Illuminate\Foundation\Bootstrap\DetectEnvironment',
            'Illuminate\Foundation\Bootstrap\LoadConfiguration',
            'Illuminate\Foundation\Bootstrap\ConfigureLogging',
            'Illuminate\Foundation\Bootstrap\HandleExceptions',
            'Illuminate\Foundation\Bootstrap\SetRequestForConsole',
            'Illuminate\Foundation\Bootstrap\RegisterProviders',
            'Illuminate\Foundation\Bootstrap\BootProviders',
        ];
    }
}

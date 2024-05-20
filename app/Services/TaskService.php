<?

namespace App\Services;

class TaskService
{

	private $taskRepository;

	public function __construct($taskRepository, $notificationService)
	{
		$this->taskRepository = $taskRepository;
	}

	public function createTask($data)
	{
		$task = $this->taskRepository->create($data);

		return $task;
	}
}

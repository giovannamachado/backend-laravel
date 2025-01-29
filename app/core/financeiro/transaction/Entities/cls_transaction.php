<?php
namespace app\core\financeiro\transaction\Entities;

class cls_transaction {
    private int $id;
    private int $user_id;
    private string $type;
    private float $value;
    private int $category_id;
    private string $created_at;
    private ?string $updated_at;

    public function __construct(int $id, int $user_id, string $type, float $value, int $category_id, string $created_at, ?string $updated_at = null) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->type = $type;
        $this->value = $value;
        $this->category_id = $category_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function id(): int {
        return $this->id;
    }

    public function user_id(): int {
        return $this->user_id;
    }

    public function type(): string {
        return $this->type;
    }

    public function value(): float {
        return $this->value;
    }

    public function category_id(): int {
        return $this->category_id;
    }

    public function created_at(): string {
        return $this->created_at;
    }

    public function updated_at(): ?string {
        return $this->updated_at;
    }

    public function atualizarInformacoes(string $type, float $value, int $category_id, string $updated_at): void {
        $this->type = $type;
        $this->value = $value;
        $this->category_id = $category_id;
        $this->updated_at = $updated_at;
    }
}
